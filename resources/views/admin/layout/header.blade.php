<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quản trị</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
<!-- IonIcons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
<script src="/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/template/admin/plugins/sweetalert2/sweetalert2.all.js"></script>
<style>
    .switch {
    width: 100px;
    height: 25px;
    position: relative;
}

.switch label {
    display: block;
    width: 100%;
    height: 100%;
    position: relative;
    background: #a5a39d;
    border-radius: 40px;
    box-shadow:
        inset 0 3px 8px 1px rgba(0,0,0,0.2),
        0 1px 0 rgba(255,255,255,0.5);
}

.switch label:after {
    content: "";
    position: absolute;
    z-index: -1;
    top: -8px; right: -8px; bottom: -8px; left: -8px;
    border-radius: inherit;
    background: #ccc; /* Fallback */
    background: linear-gradient(#f2f2f2, #ababab);
    box-shadow: 0 0 10px rgba(0,0,0,0.3),
        0 1px 1px rgba(0,0,0,0.25);
}

.switch label:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -18px; right: -18px; bottom: -18px; left: -18px;
    border-radius: inherit;
    background: #eee; /* Fallback */
    background: linear-gradient(#e5e7e6, #eee);
    box-shadow: 0 1px 0 rgba(255,255,255,0.5);
    -webkit-filter: blur(1px); /* Smooth trick */
    filter: blur(1px); /* Future-proof */
}

.switch label i {
    display: block;
    height: 100%;
    width: 60%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 2;
    border-radius: inherit;
    background: #b2ac9e; /* Fallback */
    background: linear-gradient(#f7f2f6, #b2ac9e);
    box-shadow:
        inset 0 1px 0 white,
        0 0 8px rgba(0,0,0,0.3),
        0 5px 5px rgba(0,0,0,0.2);
}

.switch label i:after {
    content: "";
    position: absolute;
    left: 15%;
    top: 25%;
    width: 70%;
    height: 50%;
    background: #d2cbc3; /* Fallback */
    background: linear-gradient(#cbc7bc, #d2cbc3);
    border-radius: inherit;
}

.switch label i:before {
    content: "off";
    position: absolute;
    top: 50%;
    right: -50%;
    margin-top: -12px;
    color: #666; /* Fallback */
    color: rgba(0,0,0,0.4);
    font-style: normal;
    font-weight: bold;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 15px;
    text-transform: uppercase;
    text-shadow: 0 1px 0 #bcb8ae, 0 -1px 0 #97958e;
}

.switch input:checked ~ label { /* Background */
    background: #9abb82;
}
 
.switch input:checked ~ label i { /* Toggle */
    left: auto;
    right: -1%;
}
 
.switch input:checked ~ label i:before { /* On/off */
    content: "on";
    right: 115%;
    color: #82a06a;
    text-shadow: 0 1px 0 #afcb9b, 0 -1px 0 #6b8659;
}
</style>