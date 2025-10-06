describe('template spec', () => {
  it('passes', () => {
    // Accedemos a la url de la pantalla en la que vamos a hacer el test
    cy.visit('http://localhost/Arepya/Consultar%20cliente.html');

    // Obtenemos el ultimo elemento de las filas del cuerpo de la tabla
    // y referenciamos el boton de eliminar de esa fila
    cy.get('table').find('tbody>tr')
      .last().find('td').last()
      .find('button[name=btnEliminar]')
      .as('btnEliminar')
    // Hacemos click sobre el boton eliminar de la ultima fila obtenida en el paso anterior
    cy.get('@btnEliminar').click();
    // Se valida que el último elemento de la lista que había sido eliminado ya no exista
    cy.contains('Angie Tatyana Garcés').should('not.exist')
  })
})