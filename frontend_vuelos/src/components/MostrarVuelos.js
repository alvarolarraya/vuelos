import React, {useEffect, useState} from 'react'
import axios from 'axios'
import {Link} from 'react-router-dom'

const endpoint = 'http://localhost:8000/api';

const MostrarVuelos = () => {
    const [vuelos, setVuelos] = useState([])
    useEffect ( () => {
        getAllVuelos()
    },[])

    const getAllVuelos = async () => {
        const response = await axios.get(`${endpoint}/vuelos`)
        setVuelos(response.data)
    }
    return (
    <div>
        <table className='table table-striped'>
            <thead className='bg-primary text-white'>
                <tr>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                {vuelos.map( (vuelo) => (
                    <tr key={vuelo.id}>
                        <td>{vuelo.origen}</td>
                        <td>{vuelo.destino}</td>
                        <td>{vuelo.precio}</td>
                    </tr>
                ))}
            </tbody>
        </table>
    </div>
    )
}

export default MostrarVuelos