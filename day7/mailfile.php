<form enctype="multipart/form-data" method="POST" action="sub.php">
    <table border="1" align="center">
        <tr>
            <th colspan="2"><center><h2>Email Form
                Data</h2></center></th>
            </tr>
            <tr>
                <td><label>Your Name </label></td>
                <td><input type="text" name="sender_name" autocomplete="off"/>
            </td>
        </tr>
        <tr>
            <td><label>Your Email</label></td>
            <td><input type="email" name="sender_email" autocomplete="off"/></td>
        </tr>
        <tr>
            <td> <label>Subject</label></td>
            <td><input type="text" name="subject" autocomplete="off" /></td>
        </tr>
        <tr>
            <td><label>Message </label></td>
            <td><textarea name="message" rows="5" autocomplete="off"></textarea> </td>
        </tr>
        <tr>
            <td><label>Attachment</label></td>
            <td><input type="file" name="attachment" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="button" value="Submit" />
            </td>
        </tr>
    </table>
</form> 