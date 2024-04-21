
<style>
.container {
  display: grid;
  grid-template-rows: repeat(2, 1fr);
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
  height: 100vh;
  background-color: #f2f2f2;
  padding: 20px;
}

.box {
  padding: 20px;
  background-color: #fff;
  border: 2px solid #000;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

h2 {
  text-align: center;
  font-size: 28px;
  margin-bottom: 20px;
}

ul, table {
  list-style-type: none;
  padding: 0;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #ddd;
}

.requirements {
  grid-column: 1;
  grid-row: 1;
}

.responsibilities {
  grid-column: 2;
  grid-row: 1;
}

.rewards {
  grid-column: 1 / -1;
  grid-row: 2;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 0;
  border-top: 2px solid #000;
}

.reward-item {
  width: 30%;
}

.reward-item h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.reward-item ul {
  margin-bottom: 0;
}

.reward-item ul li {
  margin-bottom: 5px;
}

.join-btn {
  grid-column: 2;
  grid-row: 2;
  justify-self: center;
  align-self: center;
  padding: 16px 32px;
  font-size: 28px;
  font-weight: bold;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.join-btn:hover {
  background-color: #3e8e41;
}



</style>
<script>
    const joinBtn = document.querySelector('.join-btn');

joinBtn.addEventListener('click', () => {
  alert('Thank you for applying!');
});

</script>
<!DOCTYPE html>
<html>
  <head>
    <title>Police Officer Recruitment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="box requirements">
        <h2>Requirements</h2>
        <ul>
          <li>Minimum age of 21</li>
          <li>Valid driver's license</li>
          <li>No criminal record</li>
        </ul>
      </div>
      <div class="box responsibilities">
        <h2>Responsibilities</h2>
        <ul>
          <li>Maintain law and order</li>
          <li>Investigate crimes</li>
          <li>Protect life and property</li>
        </ul>
      </div>
      <div class="box rewards">
        <h2>Rewards</h2>
        <table>
          <tr>
            <th>Grade</th>
            <th>Salary</th>
          </tr>
          <tr>
            <td>Cadet</td>
            <td>$30,000</td>
          </tr>
          <tr>
            <td>Police Officer</td>
            <td>$50,000</td>
          </tr>
        </table>
      </div>
      <button class="join-btn">Join Us</button>
    </div>
    <script src="script.js"></script>
  </body>
</html>
