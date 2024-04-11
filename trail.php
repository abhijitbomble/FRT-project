<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
        }

        .categories {
            width: 200px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .category {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .category:last-child {
            border-bottom: none;
        }

        .category.active {
            background-color: #f0f0f0;
        }

        .add-button {
            margin-top: 20px;
            background-color: #005a9e;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="categories">
            <div class="category active">Category 1</div>
            <div class="category">Category 2</div>
            <div class="category">Category 3</div>
            <button class="add-button">Add</button>
        </div>
        <div class="content">
            Content goes here.
        </div>
    </div>
</body>
</html>
