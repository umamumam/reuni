<!DOCTYPE html>
<html>
<head>
    <title>Surat Halal Bil Halal</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .title { text-align: center; font-size: 20px; font-weight: bold; }
        .content { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="title">Surat Halal Bil Halal</div>
    <div class="content">
        <p>Tanggal: {{ \Carbon\Carbon::parse($halalBilHalal->tanggal)->format('d M Y') }}</p>
        <p>Tempat: {{ $halalBilHalal->tempat }}</p>
        <p>MC: {{ $halalBilHalal->mc }}</p>
        <p>Qori: {{ $halalBilHalal->qori }}</p>
        <p>Tahlil: {{ $halalBilHalal->tahlil }}</p>
        <p>Mauidhoh: {{ $halalBilHalal->mauidhoh }}</p>
    </div>
</body>
</html>
