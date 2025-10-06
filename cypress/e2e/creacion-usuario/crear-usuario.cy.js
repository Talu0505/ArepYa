describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://localhost/Arepya/cliente%20creacion.html');

    // Se crea stub para escuchar invocacion de alert de guardado
    const stub = cy.stub();
    cy.on('window:alert', stub);

    // Se buscan y se llenan los campos de registro de usuario con sus respectivos valores de prueba
    cy.get('input[name=nombre]').type('Tatyana Garcés',  { delay: 100});
    cy.get('input[name=email]').type('taty@gmail.com',  { delay: 100});
    cy.get('input[name=telefono]').type('321321321',  { delay: 100});
    cy.get('input[name=edad]').type(31,  { delay: 100});
    cy.get('select[name=genero]').select('femenino');
    // Se hace click sobbre el boton Registrar y despues del click se valida que el stub del alert
    // haya sido invocado con el texto de cliente registrado con éxito
    cy.get('button[name=btnRegistrar]').click().then(() => {
      expect(stub.getCall(0)).to.be.calledWith('Cliente registrado con éxito')
    });

  })
})