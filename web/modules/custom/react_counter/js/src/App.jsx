import { useState } from "react"

export default function App() {
  const [counter, setCoutner] = useState(0);
  return (
    <>
      <h2>Counter:</h2>
      <h1>{counter}</h1>
      <button onClick={() => setCoutner(counter + 1)}>Increase</button>
      <button onClick={() => setCoutner(counter - 1)}>Decrease</button>
      <button onClick={() => setCoutner(0)}>Reset</button>
    </>
  )
}
