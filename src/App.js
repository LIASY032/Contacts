import logo from "./logo.svg";
import "./App.css";
import "bootstrap/dist/css/bootstrap.min.css";
import { Navbar, Container, Form, Button } from "react-bootstrap";
import { useDispatch } from "react-redux";
import { filterPersons, getPersonAction } from "./store/actions/person";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import React from "react";
import Home from "./pages/Home";
import Detail from "./pages/Detail";
function App() {
  const dispatch = useDispatch();

  React.useEffect(() => {
    async function fetchData() {
      await getPersonAction(dispatch);
    }
    fetchData();
  }, []);

  const searchRef = React.useRef();

  const handleSearch = filterPersons(dispatch);
  return (
    <div className="App">
      <Navbar bg="light" expand="lg" sticky="top">
        <Container>
          <Navbar.Brand href="/">
            <img src={logo} className="App-logo" alt="logo" />
            Your Contacts
          </Navbar.Brand>
          <Form className="d-flex">
            <Form.Control
              ref={searchRef}
              type="search"
              placeholder="Search"
              className="me-2"
              aria-label="Search"
            />
            <Button
              onClick={() => {
                handleSearch(searchRef.current.value);
              }}
            >
              Search
            </Button>
          </Form>
        </Container>
      </Navbar>

      <Router>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/detail" element={<Detail />} />
        </Routes>
      </Router>
    </div>
  );
}

export default App;
