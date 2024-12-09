<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/problemas.css">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo"><a href="index.php">StemPhp</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="current">Inicio</a></li>
                </ul>
            </nav>
        </header>
        
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Calcular la amortización del colector solar</h2>
                <p>Descripción:</p>
                <p>
                    Un colector solar plano, que se va a utilizar como medio de calefacción en Andalucía, mide 4 m² y vale 2600 €, incluida la instalación.
                    Determinar el tiempo que se tardará en amortizar (pagar lo que ha costado) si K=0.8 cal/min·cm² y está funcionando una media de 6 horas al día, 
                    durante 150 días al año. Este colector sería una alternativa al radiador eléctrico. Un KWh vale 0.08 €.
                </p>
            </section>

            <section class="formulas">
                <h2>Fórmulas</h2>
                <p><strong>Q = K × t × S × r</strong> (en Kcal)</p>
                <p>Para convertir a KWh (base 1 hora):</p>
                <p><strong>1 cal = 4.18 J</strong> y <strong>1 KWh = 3.6 × 10⁶ J</strong></p>
            </section>

            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li><strong>Precio del colector:</strong> 2600 €</li>
                    <li><strong>Coeficiente de radiación (K):</strong> 0.8 cal/min·cm²</li>
                    <li><strong>Área del colector:</strong> 4 m² (40000 cm²)</li>
                    <li><strong>Horas de funcionamiento al día:</strong> 6 horas</li>
                    <li><strong>Días de operación por año:</strong> 150 días</li>
                    <li><strong>Costo de KWh:</strong> 0.08 €/KWh</li>
                </ul>
            </section>

            <section class="calculos">
                <h2>Solución</h2>
                <p>Se calcula la energía generada, el costo anual de energía generada, y el tiempo necesario para amortizar el colector solar.</p>
            </section>
        </section>

        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA">
                <?php
                    // Datos del problema
                    $precio_colector = 2600; // en €
                    $costo_kwh = 0.08; // en €/KWh
                    $k = 0.8; // cal/min·cm²
                    $area = 40000; // cm²
                    $tiempo_diario_min = 6 * 60; // minutos
                    $dias_anuales = 150; // días de operación al año

                    // Cálculo de la energía generada diaria en cal
                    $energia_cal_diaria = $k * $tiempo_diario_min * $area;

                    // Conversión de cal a KWh
                    $energia_kwh_diaria = ($energia_cal_diaria * 4.18) / (3.6 * pow(10, 6));

                    // Energía anual en KWh
                    $energia_kwh_anual = $energia_kwh_diaria * $dias_anuales;

                    // Costo anual generado
                    $costo_anual = $energia_kwh_anual * $costo_kwh;

                    // Tiempo en años para amortizar
                    $tiempo_amortizacion = $precio_colector / $costo_anual;

                    // Convertir el tiempo de amortización a días
                    $tiempo_amortizacion_dias = ($precio_colector * $dias_anuales) / $costo_anual;

                    // Mostrar resultados
                    echo "<p><strong>Tiempo de amortización:</strong> " . round($tiempo_amortizacion, 2) . " años</p>";
                    echo "<p><strong>Tiempo de amortización (en días):</strong> " . round($tiempo_amortizacion_dias, 0) . " días</p>";
                ?>
            </div>
        </section>
    </section>

    <footer class="pie">
        Piedra Fiscal Alejandro
    </footer>
</body>
</html>
s
