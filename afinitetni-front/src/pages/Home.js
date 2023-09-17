import React from 'react';
import '../styles/Home.css'
import Header from '../components/Header.js';
import Footer from '../components/Footer.js'; 

function Home() {
  return (
    <div className="home">
   <Header />
    <h1>Welcome to My Book Review Portal</h1>
    <p>Discover and share book reviews from fellow readers.</p>
   <Footer/>
  </div>
  );
}

export default Home;