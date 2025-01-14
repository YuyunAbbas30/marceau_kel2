<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .payment-card {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .bank-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .bank-item:last-child {
            border-bottom: none;
        }
        .bank-logo {
            width: 50px;
        }
        .btn-pay {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-pay:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="payment-card">
        <h5>Pilih Pembayaran</h5>
        <form  method="POST">
            @csrf
            <div class="mb-3">
                <p><b>Virtual Account Bank (Transfer)</b></p>
                <p>6578684689</p>
            </div>
            {{-- @foreach ($banks as $bank) --}}
            <div class="bank-item">
                <div>
                    <img  class="bank-logo">
                    <span>nama bank</span>
                </div>
                <input type="radio" name="bank_id" value="">
            </div>
            {{-- @endforeach --}}
            <div class="mt-4">
                <p>Total Tagihan: <strong>Rp. 990.000</strong></p>
            </div>
            <button type="submit" class="btn-pay">Bayar</button>
        </form>
        {{-- @if(session('success')) --}}
    <div >
        {{-- {{ session('success') }} --}}
    </div>
{{-- @endif --}}
    </div>
</body>
</html>
