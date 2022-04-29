
<style>
        fieldset {
            width:70%;
            padding:100px;
            margin:150px auto;
            font-weight:bold;
        }

        form {
            background: whitesmoke;
            padding:50px;
            width:60%;
            margin:0 auto;
        }

        form input {
            position:relative;
            left:100px;
            width:200px;
            height:35px;
            margin-top:20px;
        }

        .btn {
            width:15%;
            height:30px;
            position:relative;
            left:183px;
            font-weight:bold;
        }

        form label {

        }

        form span {
            position:relative;
            left:100px;
            color:red;
            font-size:12px;
        }

    </style>

<fieldset>
    <a href="/customers" style="position: absolute;
        top:120px;
        right:200px;
        font-weight: bold;
        font-size: 16px;">View Customers</a>
<legend> Add Customer </legend>
    <form method="post" id="frmReg" action="add-customers">
        <div>
            <label> Your Name </label>
            <input type="text" name="name" id="name" required />
            <span> * Name is a required Field </span>
        </div>
        <div>
            <label> Location </label>
            <input type="text" style="margin-left:17px;" name="location" id="location" required />
            <span> * Location is a required Field </span>
        </div>
        <div>
            <label> Your Email </label>
            <input type="email" name="email" id="email" required />
            <span> * Email is a required Field </span>
        </div>
        <div>
            <input type="reset" class="btn" value="Cancel" name="reset" />
            <input type="submit" class="btn" value="Save" name="submit" />
        </div>
        @csrf
    </form>
</fieldset>

