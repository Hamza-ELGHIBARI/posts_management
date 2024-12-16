<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="grid grid-col-2 gap-4 h-full  h-screen ">
        <div class="w-1/2 flex justify-center items-center">
            <div>
                <label class="text-green-600">Titre</label>
                <input type="text" name="title" placeholder="titre du post" required />

            </div>
            <label class="text-green-600">Description</label>
            <textarea class="border-2 border-green-600" name="description" required>description du post</textarea>
            <div>
            </div>
        </div>
    </div>
</body>

</html>