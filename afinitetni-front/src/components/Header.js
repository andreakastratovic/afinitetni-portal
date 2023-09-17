import React from 'react';
import { Link } from 'react-router-dom'; 
import '../styles/Header.css';

function Header() {
  return (
    <header className="header">
      <div className="header-container">
        <Link to="/" className="logo">My Logo</Link> 
        <nav>
          <ul className="nav">
            <li><Link to="/">Home</Link></li> 
            <li><Link to="/about">About</Link></li> 
            <li><Link to="/contact">Contact</Link></li> 
            <li><Link to="/auth">Login/Register</Link></li> 
          </ul>
        </nav>
      </div>
    </header>
  );
}

export default Header;
