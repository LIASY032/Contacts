import React from "react";
import { Col, Container, Row } from "react-bootstrap";
import { useSelector } from "react-redux";
import List from "../../components/List";
import RightFilter from "../../components/RightFilter";
function Home() {
  const persons = useSelector((state) => state.persons.render) || [];

  const alphabetList = retrieveAlphabetList(persons);

  const deplicatedList = new Set(alphabetList);

  return (
    <>
      <Container style={{ maxWidth: "600px" }}>
        <Row>
          <Col xs={10}>
            {persons.length > 0
              ? persons.map(function (person) {
                  const a = person.name.toUpperCase().charAt(0);

                  let b;
                  if (deplicatedList.has(a)) {
                    b = a;
                  }
                  deplicatedList.delete(a);

                  return <List user={person} key={person.id} alphabet={b} />;
                })
              : "Loading . . ."}
          </Col>
          <Col xs={2}>
            {alphabetList && alphabetList.size > 0 && (
              <RightFilter alphabetList={alphabetList} />
            )}
          </Col>
        </Row>
      </Container>
    </>
  );
}

function retrieveAlphabetList(personList) {
  const result = new Set();
  for (const person of personList) {
    result.add(person.name.toUpperCase().charAt(0));
  }
  return result;
}

export default Home;
