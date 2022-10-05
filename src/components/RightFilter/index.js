import React from "react";
import "./style.css";
function RightFilter({ alphabetList }) {
  const list = [...alphabetList];
  return (
    <>
      <ul className="right-filter">
        {list.map(function (a, index) {
          return (
            <li key={index}>
              <a href={`/#${a}`}>{a}</a>
            </li>
          );
        })}
      </ul>
    </>
  );
}

export default RightFilter;
