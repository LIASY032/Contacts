import { FILTER_Person, GET_Person, SELECT_Person } from "../constants";

export const PersonReducer = (
  state = JSON.parse(localStorage.getItem("persons")) || {
    render: [],
    selected: {},
    sort: [],
  },
  action
) => {
  switch (action.type) {
    case GET_Person:
      const result = action.payload.sort(compare_name);
      localStorage.setItem(
        "persons",
        JSON.stringify({
          render: result,
          sort: result,
          selected: result[0],
        })
      );
      return {
        render: result,
        sort: new Object(result),
        selected: state.selected || result[0],
      };

    case FILTER_Person:
      if (action.payload) {
        const filterData = state.sort.filter((i) =>
          i.name.toLowerCase().includes(action.payload.toLowerCase())
        );
        const newFilters = Object.create(state);
        newFilters.render = filterData;
        localStorage.setItem("persons", JSON.stringify(newFilters));

        return newFilters;
      }
      return state;

    case SELECT_Person:
      const newData = Object.create(state);
      newData.selected = action.payload;
      localStorage.setItem("persons", JSON.stringify(newData));
      return newData;
    default:
      return state;
  }
};
function compare_name(a, b) {
  if (a.name.toLowerCase() < b.name.toLowerCase()) {
    return -1;
  }
  if (a.name.toLowerCase() > b.name.toLowerCase()) {
    return 1;
  }
  return 0;
}
