const http = require("http");

const server = http.createServer((req, res) => {
  res.writeHead(200, { "Content-Type": "text/html" });
  res.write("<html><head><title>Data Siswa</title></head><body>");
  res.write("<h1>Data Siswa</h1>");
  res.write("<table border='1'><tr><th>Nama</th><th>Umur</th><th>Sekolah</th></tr>");
  res.write("<tr><td>DHIKA</td><td>17 tahun</td><td>SMKN 5 Malang</td></tr>");
  res.write("</table></body></html>");
  res.end();
});

const PORT = 5000;

server.listen(PORT, () => {
  console.log(`Server is running at http://localhost:${PORT}/`);
});
