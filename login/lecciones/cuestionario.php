<?php
session_start();

// Regenerar ID de sesión para mayor seguridad
session_regenerate_id(true);

// Verificar autenticación y rol
if (
    !isset($_SESSION['usuario']) || 
    !isset($_SESSION['rol']) || 
    $_SESSION['rol'] !== 'estudiante'
) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];

// Conexión segura a MySQL
$conexion = new mysqli("localhost", "root", "", "sistema_login");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar número de intentos
$stmt = $conexion->prepare("SELECT COUNT(*) FROM resultados_quiz WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->bind_result($intentos);
$stmt->fetch();
$stmt->close();

if ($intentos >= 3) {
    echo '
    <div class="container mt-5">
      <div class="alert alert-danger text-center shadow">
        <h4>🚫 Has alcanzado el número máximo de intentos (3).</h4>
        <p>No puedes volver a presentar el quiz.</p>
      </div>
    </div>';
    exit();
}

// Preguntas con enunciado completo (cada elemento es un array con pregunta + opciones)
$questions = [
    [
        "q" => "El término solidaridad hace referencia al",
        "a" => "Competencia y rivalidad entre personas",
        "b" => "Sentimiento y actitud de unidad basada en metas o intereses comunes",
        "c" => "Búsqueda de riqueza individual",
        "correct" => "b"
    ],
    [
        "q" => "La Economía solidaria",
        "a" => "Es un sistema socioeconómico, cultural y ambiental conformado por formas asociativas sin ánimo de lucro",
        "b" => "Es un mecanismo de acumulación de riqueza",
        "c" => "Es una política de subsidios estatales",
        "correct" => "a"
    ],
    [
        "q" => "El concepto de organización solidaria hace referencia a:",
        "a" => "Organización de carácter asociativo y solidario, autogestionada, legalmente constituida y sin ánimo de lucro",
        "b" => "Cualquier empresa de carácter privado",
        "c" => "Una organización con fines estrictamente económicos",
        "correct" => "a"
    ],
    [
        "q" => "Uno de los siguientes principios no corresponde a la economía solidaria:",
        "a" => "Solidaridad",
        "b" => "Democracia",
        "c" => "Competencia desleal",
        "correct" => "c"
    ],
    [
        "q" => "Algunos de los valores de la economía solidaria son:",
        "a" => "Honestidad, ayuda mutua, solidaridad y democracia",
        "b" => "Competencia, acumulación, desigualdad",
        "c" => "Individualismo, ganancia y poder",
        "correct" => "a"
    ],
    [
        "q" => "Dentro de las organizaciones de economía solidaria están:",
        "a" => "Cooperativas, mutuales, fondos de empleados",
        "b" => "Sociedades anónimas, sociedades limitadas",
        "c" => "Empresas multinacionales",
        "correct" => "a"
    ],
    [
        "q" => "Dentro de las Organizaciones solidarias de desarrollo no están:",
        "a" => "Mutuales",
        "b" => "Cooperativas",
        "c" => "Sociedades comerciales",
        "correct" => "c"
    ],
    [
        "q" => "Las mutuales son:",
        "a" => "Organizaciones asociativas de ayuda mutua sin ánimo de lucro",
        "b" => "Sociedades anónimas por acciones",
        "c" => "Instituciones financieras privadas",
        "correct" => "a"
    ],
    [
        "q" => "Los fondos de empleados pueden constituirse con un mínimo de:",
        "a" => "10 asociados",
        "b" => "20 asociados",
        "c" => "30 asociados",
        "correct" => "b"
    ],
    [
        "q" => "Los antecedentes históricos de los fondos de empleados en Colombia hablan de organizaciones denominadas:",
        "a" => "Cajas de ahorro y crédito",
        "b" => "Sociedades mutuales",
        "c" => "Cajas de previsión",
        "correct" => "a"
    ],
    [
        "q" => "Las mutuales fueron traídas a Colombia en 1838 por los misioneros españoles, quienes en las parroquias establecieron:",
        "a" => "El auxilio mutuo",
        "b" => "El diezmo obligatorio",
        "c" => "Los gremios comerciales",
        "correct" => "a"
    ],
    [
        "q" => "Una de las características de la economía solidaria expuestas en el art. 6° de la ley 454 de 1998 es:",
        "a" => "Autogestión y solidaridad",
        "b" => "Competencia mercantil",
        "c" => "Rentabilidad individual",
        "correct" => "a"
    ],
    [
        "q" => "La estructura de las organizaciones de la economía solidaria está conformada por:",
        "a" => "Asamblea general, consejo de administración, junta de vigilancia, gerencia, comités de apoyo",
        "b" => "Accionistas y junta directiva",
        "c" => "Dueños y empleados",
        "correct" => "a"
    ],
    [
        "q" => "Los precursores del cooperativismo del siglo XVII fueron:",
        "a" => "Los pioneros de Rochdale",
        "b" => "Los socialistas utópicos",
        "c" => "Los economistas clásicos",
        "correct" => "a"
    ],
    [
        "q" => "¿Qué ley define la economía solidaria en Colombia?",
        "a" => "Ley 454 de 1998",
        "b" => "Ley 79 de 1988",
        "c" => "Ambas",
        "correct" => "c"
    ],
    [
        "q" => "Algunos de los principios de la economía solidaria son:",
        "a" => "Solidaridad, democracia, igualdad, ayuda mutua",
        "b" => "Competencia, acumulación, interés personal",
        "c" => "Exclusión, ganancia y poder",
        "correct" => "a"
    ],
    [
        "q" => "Cuál de los siguientes enunciados no corresponde a fines de la economía solidaria:",
        "a" => "El bienestar de sus asociados",
        "b" => "La especulación financiera",
        "c" => "La ayuda mutua",
        "correct" => "b"
    ],
    [
        "q" => "A la persona que integra una cooperativa se le dice:",
        "a" => "Empleado",
        "b" => "Asociado",
        "c" => "Accionista",
        "correct" => "b"
    ],
    [
        "q" => "El Artículo 38 de la constitución nacional de 1991 habla sobre:",
        "a" => "El derecho de libre asociación",
        "b" => "El derecho a la propiedad privada",
        "c" => "El derecho al trabajo",
        "correct" => "a"
    ]
];

// Desordenar preguntas
shuffle($questions);

// Procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    $totalQuestions = count($questions);

    foreach ($questions as $data) {
        if (isset($_POST[md5($data['q'])]) && $_POST[md5($data['q'])] === $data['correct']) {
            $score += 2;
        }
    }

    $maxScore = $totalQuestions * 2;
    $percentage = ($score / $maxScore) * 100;
    $status = $percentage >= 80 ? "Aprobado" : "No aprobado";

    // Guardar en la base de datos
    $stmt = $conexion->prepare("INSERT INTO resultados_quiz (usuario, puntaje, porcentaje, estado) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sids", $usuario, $score, $percentage, $status);
    $stmt->execute();
    $stmt->close();
    $conexion->close();

    // Mostrar resultados
    echo '
<div class="container mt-5">
  <div class="card shadow-lg border-0">
    <div class="card-header bg-primary text-white text-center">
      <h3 class="mb-0">📊 Resultado del Quiz</h3>
    </div>
    <div class="card-body text-center">
      <p class="fs-5"><i class="fa-solid fa-user"></i> <strong>Usuario:</strong> ' . htmlspecialchars($usuario) . '</p>
      <p class="fs-5"><i class="fa-solid fa-star"></i> <strong>Puntaje:</strong> ' . $score . ' / ' . $maxScore . '</p>
      <p class="fs-5"><i class="fa-solid fa-percent"></i> <strong>Porcentaje:</strong> ' . round($percentage, 2) . '%</p>
      <p class="fs-5">
        <i class="fa-solid fa-circle-check"></i> 
        <strong>Estado:</strong> 
        <span class="badge ' . ($status === "Aprobado" ? "bg-success" : "bg-danger") . '">
          ' . $status . '
        </span>
      </p>
      <a href="quiz.php" class="btn btn-outline-primary mt-3">
        <i class="fa-solid fa-rotate-right"></i> Volver a intentar
      </a>
    </div>
  </div>
</div>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Quiz Economía Solidaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/images/canapro-cac-grande-h.png" width="150" alt="Logo Canapro" class="me-2">
    </a>
    <div class="d-flex align-items-center">
      <span class="navbar-text text-dark me-3">
        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?>
      </span>
      <a href="../logout.php" class="btn btn-outline-primary btn-sm d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i>Cerrar sesión &nbsp;
      </a>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h1 class="mb-4">Quiz sobre Economía Solidaria</h1>
        <!-- Temporizador -->
    <div class="alert alert-danger text-center fs-5">
        ⏳ Tiempo restante: <span id="timer">60:00</span>
    </div>

    <form method="POST">
        <?php foreach ($questions as $data): ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <p><strong><?= $data['q'] ?></strong></p>
                    <?php foreach (['a','b','c'] as $key): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?= md5($data['q']) ?>" value="<?= $key ?>" required>
                            <label class="form-check-label"><?= $data[$key] ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <button type="submit" class="btn btn-success btn-lg shadow-sm px-4" 
        style="background: linear-gradient(90deg, #28a745, #218838); border: none;">
        <i class="fa-solid fa-circle-check me-2"></i> Enviar Quiz
    </button>
    </form>
    <br>
</div>

<script>
// Temporizador de 60 minutos
let tiempo = 60 * 60; // segundos
let timerEl = document.getElementById("timer");

let countdown = setInterval(() => {
    let min = Math.floor(tiempo / 60);
    let sec = tiempo % 60;
    sec = sec < 10 ? "0" + sec : sec;
    timerEl.textContent = `${min}:${sec}`;
    tiempo--;

    if (tiempo < 0) {
        clearInterval(countdown);
        alert("⏰ Tiempo agotado. El quiz se cerrará.");
        window.location.href = "quiz.php"; // reinicia el quiz
    }
}, 1000);
</script>
</body>
</html>
