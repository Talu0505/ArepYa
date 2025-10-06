describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://localhost/arepya/');

    
    const { username, password } = {username: 'taty05', password: '1234'}

    // cy.visit('/login');

    cy.get('input[name=nombreusuario]').type(username, { delay: 100 })
    cy.get('input[name=contrasena]').type(`${password}{enter}`, { delay: 100 })
    cy.contains('Contraseña incorrecta');

  })
})