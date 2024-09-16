import React, { useEffect, useState } from 'react';
import { FaBookReader, FaRegBookmark,FaSkull } from "react-icons/fa";
import TimelineItem from './TimelineItem';
import SkillItem from './SkillItem';
import SkillCategory from './SkillCategory';
import axios from 'axios';
const skillsData = {
  Frontend: ['HTML', 'CSS','JavaScript','Bootstrap','TailwindCss'],
  Backend: ['Node.js', 'PHP','Java'],
  Database: ['MongoDB', 'MySQL','SQLite'],
  Framework_and_library: ['Laravel','React','Vue','Express js','Livewire','JQuery', ],
  Other: ['Git & Github', 'Docker'],
};
const Resume = () => {

  const [educations, setEducation] = useState([]);
  const [work_exp, setWork_exp] = useState([]);
  const [skillsData, setSkillsData] = useState([]);

  useEffect(() => {
    axios.get('https://laravel-api.yaredayele.com/api/education')
    .then(response => setEducation(response.data))
    .catch(error => console.error('Error fetching user:', error));

    // for working expirence
    axios.get('https://laravel-api.yaredayele.com/api/work_exp')
    .then(response => setWork_exp(response.data))
    .catch(error => console.error('Error fetching user:', error));
    // for working expirence
    axios.get('https://laravel-api.yaredayele.com/api/skills')
    .then(response => setSkillsData(response.data))
    .catch(error => console.error('Error fetching user:', error));
  });


  return (
    <section>
      <header>
        <h2 className="h2 article-title">Resume</h2>
      </header>

      <div className="timeline">
        <div className="title-wrapper">
          <div className="icon-box">
            <FaBookReader />
          </div>
          <h3 className="h3">Education</h3>
        </div>
        <ol className="timeline-list">
        {educations.map((education, index) => (
        <TimelineItem
              key={index} 
              title={education.bachelor}
              date={`${education.start_year} - ${education.end_year}`} 
              description={education.university}
            />
          ))}

        </ol>
      </div>

      <div className="timeline">
        <div className="title-wrapper">
          <div className="icon-box">
            <FaRegBookmark />
          </div>
          <h3 className="h3">Experience</h3>
        </div>
        <ol className="timeline-list">
          {work_exp.map((work_exp,index)=>(
          <TimelineItem
          key={work_exp.id}
          title={work_exp.title}
          date={`${work_exp.company_name} ${work_exp.start_date} - ${work_exp.end_date}`}
          description={work_exp.description}
          />
            ))}
        </ol>
      </div>

      <div className="skill">
        <h3 className="h3 skills-title">My skills</h3>
        {skillsData.map((category) => (
        <div key={category.id}>
         <SkillCategory category={category} />
         
        </div>
      ))}
       
      </div>
    </section>
  );
};

export default Resume;
