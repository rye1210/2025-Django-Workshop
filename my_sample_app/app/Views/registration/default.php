<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('save'); ?>" method="post">
        <h1><strong>Registration Form</strong></h1>
        <?php if(session()->getFlashdata('success')): ?>
            <p style="color:green;"><?php echo session()->getFlashdata('success');
        ?></p>
        <?php endif; ?>
        <?php if(session()->getFlashdata('error')): ?>
            <p style="color:red;"><?php echo session()->getFlashdata('error');
        ?></p>
        <?php endif; ?>
        <label id="email" for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label id="firstname" for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" required>
        <br>

        <label id="middlename" for="middlename">Middle Name:</label>
        <input type="text" name="middlename" id="middlename" required>
        <br>

        <label id="lastname" for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" required>
        <br>

        <label id="contactno" for="contactno">Contact No:</label>
        <input type="text" name="contactno" id="contactno" required>
        <br>

        <button id="action" type="submit">Register</button>

            
    </form>
    <h2>Registered Users</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Email</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($registrations as $rows): ?>
                    <tr>
                        <td><?php echo esc($rows['reg_email']); ?></td>
                        <td><?php echo esc($rows['reg_firstname']); ?></td>
                        <td><?php echo esc($rows['reg_middlename']); ?></td>
                        <td><?php echo esc($rows['reg_lastname']); ?></td>
                        <td><?php echo esc($rows['reg_contactnumber']); ?></td>
                        <td>
                            <a href="<?= base_url("edit?no={$rows['reg_no']}") ?>">Edit</a>
                            <a href="<?= base_url("delete?no={$rows['reg_no']}") ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>