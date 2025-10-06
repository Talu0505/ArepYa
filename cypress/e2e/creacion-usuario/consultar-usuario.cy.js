describe('template spec', () => {
  it('passes', () => {
    // Accedemos a la url de la pantalla en la que vamos a hacer el test
    cy.visit('http://localhost/Arepya/Consultar%20cliente.html');

    // Obtenemos el campo de entrada de filtro de busqueda e ingresamos el nombre por el cual filtar los resultados
    cy.get('input[id=buscar-input]').type('harold steven garces');
    cy.get('button[name=btnFiltrar]').click();
    // Se valida que la tabla contiene el resultado buscado
    cy.contains('harold steven garces');
  })
})