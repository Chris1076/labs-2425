<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3b</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>

<body style="background-color: pink;">
<div class="u-fixed-width">
  <div class="p-logo-section">
    <div class="p-logo-section__items">
      <div class="p-logo-section__item">
        <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
      </div>
    </div>
  </div>
</div>

<div class="row--50-50 grid-demo">
  <div class="col">
    <h4>File Upload</h4>
    <form method="POST" action="uploaded-audio.php" enctype="multipart/form-data">
        <div class="p-card">
            <h3>MP3 File</h3>
            <p class="p-card__content">
            <input type="file" name="audio_file" accept=".mp3" />
            </p>
        </div>
        <div>
            <button type="submit">
                Upload
            </button>
        </div>
    </form>
    <form method="POST" action="uploaded-img.php" enctype="multipart/form-data">
        <div class="p-card">
            <h3>Image File</h3>
            <p class="p-card__content">
            <input type="file" name="img_file" accept="image/*" />
            </p>
        <div>
            <button type="submit">
                Upload
            </button>
        </div>
    </form>
    <form method="POST" action="uploaded-pdf.php" enctype="multipart/form-data">
        <div class="p-card">
            <h3>PDF File</h3>
            <p class="p-card__content">
            <input type="file" name="pdf_file" accept=".pdf" />
            </p>
        </div>
        <div>
            <button type="submit">
                Upload
            </button>
        </div>
    </form>
    </div>
  <div class="col">
  <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/mascot/CCS.png" alt="College of Computing Studies">
  </div>
</div>

</body>
</html>

