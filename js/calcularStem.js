function calcular() {
    // Datos iniciales
    const unAnioLuz = 9.461e15; // en metros
    const distanciaProximaCentauri = 4.0e16; // en metros
    const diametroTierra = 1.3e7; // en metros
    const tamanoReducido = 1e-3; // en metros

    // Cálculo a) Distancia en años luz
    const distanciaAnosLuz = distanciaProximaCentauri / unAnioLuz;

    // Cálculo b) Distancia escalada
    const factorEscala = tamanoReducido / diametroTierra;
    const distanciaEscalada = distanciaProximaCentauri * factorEscala;

    // Mostrar resultados
    const resultadoDiv = document.getElementById("resultadoA");
    resultadoDiv.innerHTML = `
        <p><strong>a)</strong> Distancia en años luz: ${distanciaAnosLuz.toFixed(2)} años luz</p>
        <p><strong>b)</strong> Distancia escalada: ${distanciaEscalada.toFixed(2)} m (${(distanciaEscalada / 1000).toFixed(2)} km)</p>
    `;
}
