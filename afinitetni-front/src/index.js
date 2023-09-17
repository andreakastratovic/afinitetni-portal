import React from 'react';
import { createRoot } from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'; 
import AuthPage from './pages/AuthPage';

const root = document.getElementById('root');
const rootDOM = createRoot(root);

rootDOM.render(
  <React.StrictMode>
    <Router>
      <Routes> {/* Use Routes instead of Route */}
        <Route path="/" element={<App />} /> {/* Use "element" to specify the component */}
        <Route path="/auth" element={<AuthPage />} />
      </Routes>
    </Router>
  </React.StrictMode>,
);

reportWebVitals();
