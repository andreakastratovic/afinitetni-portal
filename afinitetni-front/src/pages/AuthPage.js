import React, { useState } from 'react';
import LoginForm from './LoginForm';
import RegisterForm from './RegisterForm';
import '../styles/AuthPage.css'

function AuthPage() {
  const [isLogin, setIsLogin] = useState(true);

  const toggleForm = () => {
    setIsLogin(!isLogin);
  };

  return (
    <div className="auth-container">
      <h2>{isLogin ? 'Login' : 'Register'}</h2>
      {isLogin ? <LoginForm /> : <RegisterForm />}
      <p onClick={toggleForm}>
        {isLogin ? 'Don\'t have an account? Register here.' : 'Already have an account? Login here.'}
      </p>
    </div>
  );
}

export default AuthPage;