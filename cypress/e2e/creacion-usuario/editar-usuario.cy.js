describe('template spec', () => {
  it('passes', () => {
    // Accedemos a la url de la pantalla en la que vamos a hacer el test
    cy.visit('http://localhost/Arepya/Consultar%20cliente.html');

    // Obtenemos el ultimo elemento de las filas del cuerpo de la tabla
    // y referenciamos el boton de editar de esa fila
    cy.get('table').find('tbody>tr')
      .last().find('td').last()
      .find('button[name=btnEditar]').as('btnEditar')
    // Hacemos click sobre el boton editar de la ultima fila obtenida en el paso anterior
    cy.get('@btnEditar').click()

    // Obtener los campos deseados a editar, como el nombre
    cy.get('input[id=editar-nombre]').clear().type('Tatyana Garcés Orozco', { delay: 100 });
    cy.get('input[id=editar-correo]').clear().type('taty-orozco@gmail.com{enter}', { delay: 100 });

    // De nuevo, obtenemos la ultima fila, para comprobar que el nombre y el correo han sido cambiados correctamente

    cy.get('table').find('tbody>tr')
      .last().contains('Tatyana Garcés Orozco')

  })
})