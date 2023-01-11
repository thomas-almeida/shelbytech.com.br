'use strict'

var mainlogo = document.getElementById('main-logo')

function shiftLogo() {

    if (screen.width <= 1024) {
        mainlogo.src = 'assets/img/logo-1.png'
    } else {
        mainlogo.src = 'assets/img/logo-2.png'
    }

}
