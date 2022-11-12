import './App.css';
import MostrarVuelos from './components/MostrarVuelos';
import Login from './components/Login';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Cabecera from './components/Cabecera.js';

function App() {
  return (
    <div className="App">
      <Cabecera />
      <BrowserRouter>
        <Routes>
          <Route path='/' element={ <MostrarVuelos/> } />
          <Route path='/login' element={ <Login/> } />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
