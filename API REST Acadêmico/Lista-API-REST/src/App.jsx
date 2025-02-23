import { useEffect, useState } from 'react'
import './App.css'
import axios from 'axios'
function App() {

  const [objetos, setObjetos] = useState([])
  const [NovoObjeto, setNovoObjeto] = useState()
  const [busca, setBusca] = useState("")
  const [editando, setEditando] = useState(null)
  const [titulo, setTitulo] = useState("")

  //Puxa todos os dados
  useEffect(() => {
    axios.get("http://localhost:3001/lista")
      .then(resposta => setObjetos(resposta.data))
      .catch((err) => console.log(err))
  }, [])

  //Adiciona Dado
  const handleSubmit = (e) => {
    e.preventDefault()

    const arrayCheio = {
      titulo: NovoObjeto,
    };

    axios.post("http://localhost:3001/lista", arrayCheio)
      .then(resposta => setObjetos([...objetos, resposta.data]))
      .catch((err) => console.log(err))
  }

  //Remove dado

  const handleRemove = (id) => {
    axios.delete(`http://localhost:3001/lista/${id}`)
      .then(setObjetos(objetos.filter(objeto => objeto.id !== id)))
      .catch((err) => console.log(err))
  }

  // Nova linha que filtra um dado
  const objetoFiltrado = objetos.filter(objeto => objeto.titulo.toLowerCase().startsWith(busca.toLowerCase()));

  //Quando pressionar para editar...
  const handleEdit = (id, titulo) => {
    setEditando(id)
    setTitulo(titulo)
  }
  //de fato salva no banco
  const handleSalvaEdit = (id) => {
    axios.put(`http://localhost:3001/lista/${id}`, { titulo: titulo})
    .then(resposta => {setObjetos(objetos.map(obj => obj.id === id ? {...obj, titulo: titulo} : obj));
  })
      .catch((err) => console.log(err))
      setEditando(null)
  }
  
  return (
  <div className="container">
    <div className="background-shapes">
      <div className="shape shape-1"></div>
      <div className="shape shape-2"></div>
      <div className="shape shape-3"></div>
      <div className="shape shape-4"></div>
    </div>
    <div className="content">
      <h1>Listagem com API REST</h1>
      
      <div className="search-container">
        <input 
          type="text" 
          placeholder="Pesquisar..."
          value={busca}
          onChange={(e) => setBusca(e.target.value)}
        />
        <button onClick={() => setBusca(NovoObjeto)}>Pesquisar</button>
      </div>

      <form onSubmit={handleSubmit}>
        <input 
          value={NovoObjeto} 
          type="text" 
          placeholder="Adicionar novo item..."
          onChange={(e) => setNovoObjeto(e.target.value)} 
        />
        <input type="submit" value="Adicionar" />
      </form>

      {objetoFiltrado.map(objeto => (
        <div key={objeto.id} className="item-container">
          {editando === objeto.id ? (
            <div className="edit-container">
              <input 
                type="text" 
                value={titulo} 
                onChange={(e) => setTitulo(e.target.value)}
              />
              <div className="button-group">
                <button onClick={() => handleSalvaEdit(objeto.id)}>Salvar</button>
                <button className="remove" onClick={() => setEditando(null)}>Cancelar</button>
              </div>
            </div>
          ) : (
            <>
              <span className="item-title">{objeto.titulo}</span>
              <div className="button-group">
                <button className="edit" onClick={() => handleEdit(objeto.id, objeto.titulo)}>
                  Editar
                </button>
                <button className="remove" onClick={() => handleRemove(objeto.id)}>
                  Remover
                </button>
              </div>
            </>
          )}
        </div>
      ))}
    </div>
  </div>
);

}

export default App

