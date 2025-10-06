describe('template spec', () => {
  it('passes', () => {

    cy.visit('http://localhost/Arepya/Crear_Producto.html');


    cy.get('input[name=nombre]').type('Galletas de mais');
    cy.get('input[name=presentacion]').type('25 gramos');

  })
})