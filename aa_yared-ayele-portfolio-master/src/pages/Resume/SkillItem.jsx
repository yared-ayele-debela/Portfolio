
const SkillItem = ({ skill }) => {
  const styles = {
    padding: '6px 15px',
    borderRadius: '3px',
    backgroundColor: '#121212',
    color: '#fff',
    border: '1px solid #007FB1',
    fontSize: '15px',
    cursor: 'pointer',
    margin:'4px',
  };

  return (
    <button
    style={styles}
    onMouseOut={(e) => (e.currentTarget.style.backgroundColor = styles.backgroundColor)}
  >
    {skill.name}
  </button>
  );
}

export default SkillItem;
