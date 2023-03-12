<style>
  /*Contact*/

  /* Style inputs */
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: none;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  /* Style the container/contact section */
  .container {
    border-radius: 5px;
    padding: 10px;
  }
  
  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
   
</style>

<div class="container">
  <div style="text-align:center">
    <h2>Contact</h2>
    <p>Swing by for a cup of coffee, or leave me a message</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/me1.JPG" style="width:100%">
    </div>
    <div class="column">
      <form>
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" placeholder="9869550743">
        <label for="email">Email</label>
        <input type="text" id="email" placeholder="jireldhiraj123@gmail.com">
        <label for="subject">Subject</label>
        <textarea placeholder="Hey! you can contact me by phone or email. But this form is not dynamic yet! I have social sites too.." style="height:170px"></textarea>
      </form>
    </div>
  </div>
</div>