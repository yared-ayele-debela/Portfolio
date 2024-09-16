// src/components/SkillCategory.js
import React from 'react';
import SkillItem from './SkillItem';

const SkillCategory = ({ category }) => {
  return (
    <div>
      <h4 style={{color:'#fff'}}>{category.name}</h4>
      <div style={{ display: 'flex', flexWrap: 'wrap', gap: '10px' }}>
        {category.skills.map((skill, index) => (
          <SkillItem key={index} skill={skill} />
        ))}
      </div>
    </div>
  );
};

export default SkillCategory;
