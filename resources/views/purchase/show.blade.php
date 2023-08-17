<!DOCTYPE html>
<html>

<head>
    <style>
        .input-container {
            display: flex;
            justify-content: space-between;
            margin-left: 20px;
            margin-right: 20px;
        }

        .input-box-container {
            width: 22%;
        }

        .input-box {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .next-button {
            padding: 20px 40px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
        }

        .large-box {
            margin-top: 30px;
            padding: 20px;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            background-color: white;
            
        }

        .inner-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .item-dropdown,
        .price-placeholder,
        .quantity-input,
        .total_amount-placeholder,
        .add-button-box,
        .grand-total-box {
            flex-basis: calc(18% - 10px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-button {
            padding: 5px 10px;
            background-color: lightgreen;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        .total-box {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
            align-items: center;
        }

        .grand-total-box {
            flex-basis: 30%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: left;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 100px;
        }

        .grand-total-placeholder {
            flex-basis: 70%;
        }
        
        .submit-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="input-container" style="margin-top: 20px">
        <div class="input-box-container">
            <label for="input1" style="margin-left: 100px">Vendor Name</label>
            <input type="text" id="input1" name="input1" class="input-box">
        </div>
        <div class="input-box-container">
            <label for="input2" style="margin-left: 100px">Vendor Mobile No.</label>
            <input type="text" id="input2" name="input2" class="input-box">
        </div>
        <div class="input-box-container">
            <label for="input3" style="margin-left: 100px">Invoice No.</label>
            <input type="text" id="input3" name="input3" class="input-box">
        </div>
        <div class="input-box-container">
            <label for="input4" style="margin-left: 100px">Invoice Date</label>
            <input type="text" id="input4" name="input4" class="input-box">
        </div>
    </div>

    <div class="button-container">
        <button class="next-button">Next</button>
    </div>

    <div class="large-box">
        <div class="inner-box">
            <select class="item-dropdown">
                <option value="item1">Item 1</option>
                <option value="item2">Item 2</option>
                <option value="item3">Item 3</option>
            </select>
            <input type="text" class="price-placeholder" value="Price" readonly>
            <input type="number" class="quantity-input" placeholder="Quantity">
            <input type="number" class="Total_amount-placeholder" placeholder="Total_amount">

            <div class="add-button">
                <button class="add-button">Add</button>
            </div>
        </div>

        <div class="total-box">
            <div class="grand-total-box">
                <span class="grand-total-placeholder">Grand Total:</span>
                <span class="grand-total-value"></span>
            </div>
        </div>

        <div class="submit-button">
            <button class="next-button">Submit</button>
        </div>
    </div>

</body>

</html>
