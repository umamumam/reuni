<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        .tree-wrapper {
            text-align: center;
            margin: 0 auto;
        }

        .card {
            display: inline-block;
            border: 1px solid #000;
            padding: 5px;
            margin: 5px;
            width: 130px;
            word-wrap: break-word;
        }

        .line {
            width: 2px;
            height: 20px;
            background-color: black;
            margin: 0 auto;
        }

        .pasangan-line {
            font-weight: bold;
        }

        .children-wrapper {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .edit-btn {
            display: none;
        }
    </style>
</head>
<body>
    <div class="tree-wrapper">
        @include('keluarga._tree', ['anggota' => $root, 'displayedMembers' => []])
    </div>
</body>
</html>
