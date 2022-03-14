<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="../../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <script src="../../bootstrap/js/jquery-3.6.0.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
    <style>
        .navi, .dropdown-menu{
            background-color: navy;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navi ">
    <a class="navbar-brand" href="#">SYSTEMS ADMINISTRATIONS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="systemaddministration.php">Dashboard </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../staff%20Details/staff.php">Staff</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Biling and Invoices</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="invoice.php">Invoice</a>
                    <a class="nav-link" href="receipts.php">Receipts</a>
                    <a class="nav-link" href="invoicereports.php">Invoice Table</a>
                    <a class="nav-link" href="receiptreports.php">Receipt Table</a>
                    <a class="nav-link" href="dateinvoice.php">Invoice Report</a>
                    <a class="nav-link" href="datereceipt.php">Receipt Report</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Enquiries</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="enquiries.php">Enquires</a>
                    <a class="nav-link" href="registration.php">Registration</a>
                    <a class="nav-link" href="enquiriesreports.php">Enquiries Table</a>
                    <a class="nav-link" href="registrationreports.php">Registration Table</a>
                    <a class="nav-link" href="dateenquiries.php">Enquiry Date</a>
                    <a class="nav-link" href="dateregistration.php">Registration Date</a>
                </div>
            </li>
            <li class="nav-item">
                <a  class="nav-link btn btn-danger" href="../../logout.php">Log out</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <br>
    <div class="c0l-md-6"></div>
    <div class="c0l-md-6">
        <h3><u>Registration</u></h3>
        <form action="registrationdetails.php" method="post">
            <label>Admission Number :
                <input type="text" name="addmnumber" class="form-control" required>
            </label>
            <label>Registration Date :
                <input type="date" name="regdate" class="form-control" required style="width: 210px">
            </label>
            <label>First Name :
                <input type="text" name="fname" class="form-control" required>
            </label>
            <label>Other Names :
                <input type="text" name="oname" class="form-control" required>
            </label>
            <label>Gender :
                <select name="gender" id="" class="form-control" required style="width: 200px">
                    <option value="gender">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </label>
            <label>Date of Birth :
                <input type="text" name="dateofbirth" class="form-control" required>
            </label>
            <label>Postal Address :
                <input type="text" name="address" class="form-control" required>
            </label>
            <label>Phone Number :
                <input type="tel" name="number" class="form-control" required>
            </label>
            <label>email :
                <input type="email" name="email" class="form-control" required>
            </label>
            <label>Next of Kin Name :
                <input type="text" name="nextkin" class="form-control" required>
            </label>
            <label>Next of Kin Number :
                <input type="tel" name="nextkinNo" class="form-control" required>
            </label>
            <label>Course Enrolled :
                <input type="text" name="course" class="form-control" required>
            </label>
            <label>KCSE GRADE :
                <input type="text" name="grade" class="form-control" required>
            </label>
            <label>Education Level :
                <select name="education" id="" class="form-control" required style="width: 210px">
                    <option value="Level">Level</option>
                    <option value="High School">High School</option>
                    <option value="College">College</option>
                    <option value="university">University</option>
                </select>
            </label>
            <label>High School Attended :
                <input type="text" name="school" class="form-control" required>
            </label>
            <label>From :
                <input type="text" name="from" class="form-control" required>
            </label>
            <label>TO :
                <input type="text" name="to" class="form-control" required>
            </label>
            <label>College/University Attended :
                <input type="text" name="attended" class="form-control" required>
            </label>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="registrationupdate.php">Update</a>
            </div>
        </form>
    </div>
    <div class="c0l-md-6"></div>
</div>

</body>
</html>
