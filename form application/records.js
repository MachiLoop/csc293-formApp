const searchInput = document.getElementById("search");
const tableRows = document.querySelectorAll("tr");

const result = [];

console.log(tableRows);
console.log(result);
// tableRows.forEach((row) => {

for (let i = 1; i < tableRows.length; i++) {
  //   console.log(row.querySelectorAll("td"));
  const [id, name, gender, language, email, phone, zip, about] = Array.from(
    tableRows[i].querySelectorAll("td")
  ).map((data) => data.innerText);

  result.push({
    id: id,
    name: name,
    gender: gender,
    language: language,
    email: email,
    phone: phone,
    zip: zip,
    about: about,
  });
  // });
}
console.log(result[1]);

function buildTableData() {
  const elements = [...document.querySelectorAll("td")];
  return elements.map((x) => {
    return { content: x.innerHTML };
  });
}

// console.log(buildTableData());

searchInput.addEventListener("input", (e) => {
  const value = e.target.value;
  console.log(value);

  result.forEach((res) => {
    if (
      res.language.toLowerCase().includes(value.toLowerCase()) ||
      res.name.toLowerCase().includes(value.toLowerCase()) ||
      res.gender.toLowerCase().includes(value.toLowerCase()) ||
      res.email.toLowerCase().includes(value.toLowerCase()) ||
      res.phone.includes(value) ||
      res.zip.includes(value)
    ) {
      tableRows[res.id].style.display = "grid";
    } else {
      console.log(res.id);
      tableRows[res.id].style.display = "none";
    }
  });
});
