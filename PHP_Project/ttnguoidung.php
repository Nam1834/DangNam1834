<html>
    <head>
        <style>
            form{
                width: 600px;
            }
            div{
                display: flex;
                margin-bottom: 20px;
            }
            label{
                width: 100px;
            }
            input,textarea{
                flex: 1;
            }
            button{
                margin-left: 100px;
                padding: 6px 120px;
                color: #2F1C25;
                background-color: transparent;
                border: 3px solid #D7B0DF;
                border-radius: 8px;
                cursor:pointer
            }
        </style>
    </head>
    <body>
        <a href="trangchu.php" >Quay về</a>
        <h1>Thêm sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="ten">Tên sản phẩm</label>
                <input type="text" id='ten' name="ten" required>
            </div>
            <div>
                <label for="gia">Giá sản phẩm</label>
                <input type="number" id='gia' name="gia" required>
            </div>
            <div>
                <label for="file">Hình ảnh</label>
                <input type="file" id='gia' name="hinhanh" value="Choose File" required>
            </div>
            <div>
                <label for="mota">Mô tả</label>
                <textarea name="mota" id="mota" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" name="submit">
                Thêm sản phẩm
            </button>

            
        </form>
    </body>
</html>