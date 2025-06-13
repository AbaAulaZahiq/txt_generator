<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Text ke File .txt</title>
</head>
<body>
    <h2>Masukkan Teks untuk Dijadikan File .txt</h2>
    <form onsubmit="downloadText(this)" method="post">
        <input type="text" id="fileName" name="file_name" placeholder="Masukkan nama file"> <br><br>
        <textarea name="user_text" id="textArea" rows="40" style="width:100%" placeholder="Tulis teks di sini..."></textarea><br><br>
        <input type="submit" value="Simpan sebagai .txt">
    </form>

     <script>
        function downloadText(e) {
          
            let fileName = document.getElementById("fileName").value;
            const text = document.getElementById("textArea").value;
            const blob = new Blob([text], { type: "text/plain" });
            const url = URL.createObjectURL(blob);

            if(!fileName){
                fileName = 'hasil_text.txt' 
            }else{
                fileName += '.txt'   
            }

            const a = document.createElement("a");
            a.href = url;
            a.download = fileName; // nama file saat diunduh
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        
            e.preventDefault()
        }

    </script>
</body>
</html>
