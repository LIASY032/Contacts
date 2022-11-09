import axios from "axios";

export async function getPerson() {
  try {
    const { data } = await axios.get(
      "https://jsonplaceholder.typicode.com/users"
    );
    return data;
  } catch (e) {
    console.log(e.response.data);
  }
}
