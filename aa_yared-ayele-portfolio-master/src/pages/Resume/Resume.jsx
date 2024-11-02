import React, { useEffect, useState } from 'react';
import { FaBookReader, FaRegBookmark } from "react-icons/fa";
import TimelineItem from './TimelineItem';
import SkillCategory from './SkillCategory';
import axios from 'axios';

const Resume = () => {
  const [educations, setEducation] = useState(() => {
    const savedEducation = localStorage.getItem('educations');
    return savedEducation ? JSON.parse(savedEducation) : [];
  });

  const [work_exp, setWork_exp] = useState(() => {
    const savedWorkExp = localStorage.getItem('work_exp');
    return savedWorkExp ? JSON.parse(savedWorkExp) : [];
  });

  const [skillsData, setSkillsData] = useState(() => {
    const savedSkills = localStorage.getItem('skillsData');
    return savedSkills ? JSON.parse(savedSkills) : [];
  });

  useEffect(() => {
    const fetchData = async () => {
      try {
        const [educationResponse, workResponse, skillsResponse] = await Promise.all([
          axios.get('https://laravel-api.yaredayele.com/api/education'),
          axios.get('https://laravel-api.yaredayele.com/api/work_exp'),
          axios.get('https://laravel-api.yaredayele.com/api/skills')
        ]);

        setEducation(educationResponse.data);
        setWork_exp(workResponse.data);
        setSkillsData(skillsResponse.data);

        // Save to localStorage
        localStorage.setItem('educations', JSON.stringify(educationResponse.data));
        localStorage.setItem('work_exp', JSON.stringify(workResponse.data));
        localStorage.setItem('skillsData', JSON.stringify(skillsResponse.data));
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    // Fetch data only if it's empty
    if (educations.length === 0 || work_exp.length === 0 || skillsData.length === 0) {
      fetchData();
    }
  }, [educations, work_exp, skillsData]);

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
          {work_exp.map((work, index) => (
            <TimelineItem
              key={work.id}
              title={work.title}
              date={`${work.company_name} ${work.start_date} - ${work.end_date}`}
              description={work.description}
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
