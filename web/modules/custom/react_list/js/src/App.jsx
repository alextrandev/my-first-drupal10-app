import { useEffect, useState } from 'react'

export default function App() {
  const [nodes, setNodes] = useState([]);
  console.log("App loading...");

  useEffect(() => {
    fetch("/jsonapi/node/article")
      .then(response => response.json())
      .then(data => setNodes(data.data));
  }, []);

  return (
    <div>
      <h1>Articles list</h1>
      <ul>
        {nodes.map(node => (
          <li key={node.id}>{node.attributes.title}</li>
        ))}
      </ul>
    </div>
  )
}
