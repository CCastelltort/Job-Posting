<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div>
        <nav>
            <div>Logo</div>
            
            <div>
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>Post a Job</div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
 
    
</body>
</html>