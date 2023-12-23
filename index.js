const express = require('express');
const mysql = require('mysql');

const app = express();
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '5951561010',
  database: 'bd_colfransen',
});

connection.connect((err) => {
  if (err) {
    console.error('Error de conexión a la base de datos:', err);
    return;
  }
  console.log('Conexión a la base de datos establecida');
});

app.set("view engine", "ejs");
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

app.get("/", function (req, res) {
  res.render("contacto");
});

app.post("/insertar", function (req, res) {
  const datos = req.body;
  const nombre = datos.nombre;
  const correo = datos.correo;
  const detalle = datos.detalle;
  const telefono = datos.telefono;
  const fecha = '2023-12-21';

  const registrarContacto={
    nombre:nombre,
    correo:correo,
    detalle:detalle,
    telefono:telefono,
    fecha:fecha
  }
  let buscarDuplicado="SELECT * FROM contacto WHERE nombre='"+nombre+"'";
  connection.query(buscarDuplicado,function(error,row){
    if(error){
      throw error;
    }
    else{
      if(row.length>0){
        console.log("Nose puede registrar, el registro ya se encuentra")
      }
      else{
        const registrar = "INSERT INTO contacto set ?";
        connection.query(registrar, registrarContacto, function(error) {
          if (error) {
            console.error('Error al insertar el registro:', error);
            res.status(500).json({ error: 'Error al insertar el registro' });
            return;
          }
          console.log('Registro insertado correctamente. ID:');
          res.json({ success: true });
        });
        
      }
    }
    
  })
 
});

app.listen(3000, function () {
  console.log("Servidor creado en http://localhost:3000");
});
