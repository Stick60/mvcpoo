import React from 'react';


const Nav = () => {
    return (
        <header class="header">
            <span class="logo ml-px mt-l">Le Blog de <span class="italic">Luc</span></span>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#equipe">Notre equipe</a></li>
                <li><a href="#service">Nos services</a></li>
                <li><a href="#temoignage">Témoignages</a></li>
                <li><a href="#contact">Contactez-nous</a></li>
                <li ><a href="#galerie">Notre galerie</a></li>
            </ul>
        </header>
    );
};

export default Nav;