<?php
// Establece el encabezado para que el navegador sepa que la respuesta es un JSON
header('Content-Type: application/json');

// Incluye el archivo de conexión a la base de datos
include "mi_conexion.php";

// --- FUNCIONES ---

// Función para buscar Sede
function buscarSede($conexion, $ciudad)
{
    if (empty($ciudad))
        return null;

    $ciudad = strtolower(trim($ciudad));
    $sql = "SELECT ciudad, direccion, telefono, horario 
             FROM sedes WHERE LOWER(ciudad) = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $ciudad);
    $stmt->execute();
    $res = $stmt->get_result();

    $respuestas = [];
    while ($row = $res->fetch_assoc()) {
        $respuestas[] = "📍 {$row['ciudad']} - {$row['direccion']} - 📞 {$row['telefono']} - ⏰ {$row['horario']}";
    }

    return $respuestas ? implode("<br>", $respuestas) : null;
}

// Busca tabla afiliaciones
function getAfiliacionInfo($conexion, $pregunta)
{
    if (empty($pregunta)) {
        return null;
    }

    $sql = "SELECT respuesta FROM afiliacion WHERE pregunta = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $pregunta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return "" . $row['respuesta'];
    }

    return null;
}

function getAhorroInfo($conexion, $pregunta)
{
    if (empty($pregunta)) {
        return null;
    }

    $sql = "SELECT respuesta FROM ahorros WHERE pregunta = ? ";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $pregunta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return "" . $row['respuesta'];
    }

    return null;

}

function getCreditoInfo($conexion, $pregunta)
{
    if (empty($pregunta)) {
        return null;
    }

    $sql = "SELECT respuesta FROM creditos WHERE pregunta = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $pregunta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return "" . $row['respuesta'];
    }
    return null;
}

function otrosServicios($conexion, $pregunta)
{
    if (empty($pregunta)) {
        return null;
    }
    $sql = 'SELECT respuesta FROM servicios_adicionales WHERE pregunta = ?';
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('s', $pregunta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return '' . $row['respuesta'];
    }

}

// ----------------------------------------------------
// LÓGICA PRINCIPAL DEL CHATBOT
// ----------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"] ?? '';
    $pregunta = $_POST["pregunta"] ?? '';
    $respuesta = '';
    $opciones = [];

    switch ($action) {
        case 'show_afiliaciones':
            // Se selecciona "Afiliación", se muestran las sub-opciones
            $respuesta = 'Por favor, selecciona una opción sobre afiliaciones:';
            $sql = "SELECT pregunta FROM afiliacion ORDER BY id";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // El action "get_info_afiliacion" le dice al PHP que debe buscar la respuesta
                    $opciones[] = ['text' => $row['pregunta'], 'action' => 'get_info_afiliacion'];
                }
            } else {
                $respuesta = 'No hay opciones de afiliación en este momento.';
            }
            break;

        case 'get_info_afiliacion':
            // Se selecciona una pregunta de afiliación, se busca la respuesta
            $afiliacionInfo = getAfiliacionInfo($conexion, $pregunta);
            if ($afiliacionInfo) {
                $respuesta = $afiliacionInfo;
            } else {
                // Si la pregunta no se encuentra, se usa la IA como respaldo
                $respuesta = 'No ya afiliaciones en este momento';
            }
            break;

        case 'show_ahorros':
            $respuesta = 'Por favor, seleccione una opcón sobre ahorros';
            $sql = "SELECT pregunta FROM ahorros ORDER BY id";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $opciones[] = ['text' => $row['pregunta'], 'action' => 'info_ahorros'];
                }
            } else {
                $respuesta = 'No hay opciones de ahorros en este momento';
            }
            break;

        case 'info_ahorros':
            $ahorrosInfo = getAhorroInfo($conexion, $pregunta);
            if ($ahorrosInfo) {
                $respuesta = $ahorrosInfo;
            } else {
                $respuesta = 'No hay ahorros en este momento';
            }
            break;


        case 'show_sedes':
            // Se selecciona "Sedes", se muestran las ciudades
            $respuesta = 'Por favor, selecciona la ciudad de la sede que te interesa:';
            $sql = "SELECT DISTINCT ciudad FROM sedes ORDER BY ciudad";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // El action "get_sede_info" le dice al PHP que debe buscar la información de la sede
                    $opciones[] = ['text' => $row['ciudad'], 'action' => 'get_sede_info'];
                }
            } else {
                $respuesta = 'No hay sedes registradas en este momento.';
            }
            break;

        case 'get_sede_info':
            // Se selecciona una ciudad, se busca la información de la sede
            $sedeInfo = buscarSede($conexion, $pregunta);
            if ($sedeInfo) {
                $respuesta = $sedeInfo;
            } else {
                $respuesta = 'No se encontró información para la sede en esa ciudad.';
            }
            break;

        case 'show_creditos':
            $respuesta = 'Por favor, seleccione una opción sobre Créditos';
            $sql = "SELECT  pregunta FROM creditos ORDER BY id";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    
                    $opciones[] = ['text' => $row['pregunta'], 'action' => 'info_credito'];
                }
            } else {
                
                $respuesta = 'No hay opciones de créditos en este momento.';
            }
            break;

        case 'info_credito':
            $creditoInfo = getCreditoInfo($conexion, $pregunta);
            if ($creditoInfo) {
                $respuesta = $creditoInfo;
            } else {
                $respuesta = 'No se encontró información para créditos.';
            }
            break;

         case 'show_servicios':
            $respuesta = 'Por favor, seleccione una opción sobre otros servicios';
            $sql = "SELECT  pregunta FROM servicios_adicionales ORDER BY id";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    
                    $opciones[] = ['text' => $row['pregunta'], 'action' => 'info_servicios'];
                }
            } else {
                
                $respuesta = 'No hay opciones.';
            }
            break;

        case 'info_servicios':
            $servicioInfo = otrosServicios($conexion, $pregunta);
            if ($servicioInfo) {
                $respuesta = $servicioInfo;
            } else {
                $respuesta = 'No se encontró información.';
            }
            break;

        // Maneja el caso de volver al menú principal
        case 'start_chat':
        default:
            $respuesta = '¡Hola! 👋 ¿Cómo puedo ayudarte?';
            $opciones = [
                ['text' => 'Afiliación 📝', 'action' => 'show_afiliaciones'],
                ['text' => 'Sedes 🏢', 'action' => 'show_sedes'],
                ['text' => 'Ahorros💰', 'action' => 'show_ahorros'],
                ['text' => 'Créditos 💳', 'action' => 'show_creditos'],
                ['text' =>'Otros Servicios ✨','action'=> 'show_servicios']
            ];
            break;
            
    }

    if ($action !== 'start_chat' && !empty($respuesta)) {
    $opciones[] = ['text' => 'Volver al menú principal 🔙', 'action' => 'start_chat'];
    /*$opciones[] = ['text' => 'Hablar con un asesor', 'url' => 'link asesor']; ---> hablar con esesor */ 
}


    echo json_encode(['respuesta' => $respuesta, 'opciones' => $opciones]);
    $conexion->close();
}
?>