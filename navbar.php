<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Hadith Insight</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="chapters.php">Chapters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hadith.php">Hadith</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .navbar.bg-body-tertiary {
            background-color: blanchedalmond;
        }
        .navbar-brand, .nav-link, .navbar-toggler-icon, .form-control, .btn-outline-success {
            color: #F4C430;
        }
        .navbar-toggler-icon {
            filter: invert;
        }
        .form-control {
            border-color:  #F4C430;
        }
        .btn-outline-success {
            border-color:  #F4C430;
        }
        .btn-outline-success:hover {
            background-color:  #F4C430;
            color: blanchedalmond;
            border-color:  #F4C430;
        }
    </style>
</head>
<body>
<form method="POST" action="">
            <div class="mb-3">
                <label for="bookSlug" class="form-label">Book Slug</label>
                <select class="form-select" id="bookSlug" name="bookSlug" required>
                    <option value="sahih-bukhari">Sahih Bukhari</option>
                    <option value="sahih-muslim">Sahih Muslim</option>
                    <option value="al-tirmidhi">Jami' at-Tirmidhi</option>
                    <option value="abu-dawood">Sunan Abu Dawood</option>
                    <option value="ibn-e-majah">Sunan Ibn-e-Majah</option>
                    <option value="sunan-nasai">Sunan An-Nasa`i</option>
                    <option value="mishkat">Mishkat Al-Masabih</option>
                    <option value="musnad-ahmad">Musnad Ahmad</option>
                    <option value="al-silsila-sahiha">Al-Silsila Sahiha</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="language" class="form-label">Search Language</label>
                <select class="form-select" id="language" name="language" required>
                    <option value="arabic">Arabic</option>
                    <option value="english">English</option>
                    <option value="urdu">Urdu</option>
                    <option value="h-num">Hadith Number</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="searchQuery" class="form-label">Search Query</label>
                <input type="text" class="form-control" id="searchQuery" name="searchQuery" placeholder="Enter search query">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
</body>
