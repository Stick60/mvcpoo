import React from 'react';
import Nav from '../components/Nav';
import Banniere from '../components/Banniere';
import Footer from '../components/Footer';


const divstyle = {
    width: '100 %',
}

const Home = () => {
    return (
        <div style={divstyle}>
            <Nav />
            <Banniere />
            <Footer />
        </div>
    );
};

export default Home;