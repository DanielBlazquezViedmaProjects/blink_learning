import React from 'react';

const ListaColores = ({ colores }) => {
	    return (
	        <ul>
	            {colores.map((color, index) => (
	                <li key={index}>{color}</li>
	            ))}
	        </ul>
	    );
	};
  
export default App = () => {
	    const colores = ["Amarillo", "Azul", "Rojo", "Verde"];

	    return (
	        <div>
	            <h1>Lista de Colores</h1>
	            <ListaColores colores={colores} />
	        </div>
	    );
	};

