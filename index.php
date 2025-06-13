<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Text ke File .txt</title>
</head>
<body>
    <h2>Masukkan Teks untuk Dijadikan File .txt</h2>
    <form onsubmit="return false;">
    <input type="text" id="fileName" name="file_name" placeholder="Masukkan nama file"> <br><br>
    <textarea name="user_text" id="textArea" rows="40" style="width:100%" placeholder="Tulis teks di sini..."></textarea><br><br>
    <button type="button" onclick="downloadText()">Simpan sebagai .txt</button>
</form>


     <script>
        function downloadText() {
    let fileName = document.getElementById("fileName").value;
    const text = document.getElementById("textArea").value;
    const blob = new Blob([text], { type: "text/plain" });
    const url = URL.createObjectURL(blob);

    if (!fileName) {
        fileName = 'hasil_text.txt';
    } else {
        fileName += '.txt';
    }

    const a = document.createElement("a");
    a.href = url;
    a.download = fileName;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}


    </script>
</body>
</html>
