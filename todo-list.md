# Blog Content Generator - Implementation Todo List

## Current Status: Keywords Architecture Setup Complete
- ✅ Created keywords folder structure: `/.resources/content-guidelines/keywords/`
- ✅ Updated agent to reference category-specific CSV files
- ✅ Updated CLAUDE.md documentation

---

## Phase 1: Keyword Data Organization

### 1.1 Create Category-Specific CSV Files
Create separate CSV files for each treatment category:

- [ ] **botox.csv** - All Botox-related keywords
- [ ] **dermal-fillers.csv** - All dermal filler keywords  
- [ ] **dysport.csv** - Dysport-specific keywords (if separate from Botox)

**Location:** `/.resources/content-guidelines/keywords/`

**CSV Structure:** (confirmed)
- Keyword or keyphrase
- Average monthly searches  
- 3-month change (%)
- Year-over-year change (%)
- Competition (low/medium/high)
- Competition indexed value (0-100)
- Top of page bid low range
- Top of page bid high range

**Sorting:** By "Average monthly searches" (descending - highest first)

### 1.2 Data Analysis for Each Category
For each CSV file, perform one-time analysis to determine:

- [ ] **botox-analysis.md** - Botox keyword analysis and rules
- [ ] **dermal-fillers-analysis.md** - Dermal filler keyword analysis and rules  
- [ ] **dysport-analysis.md** - Dysport keyword analysis and rules

**Analysis Requirements for Each:**
- Search volume distribution (natural breakpoints for high/mid/low tiers)
- Competition patterns (where sweet spots are)
- Growth trends (positive momentum ranges)  
- Volume vs Competition correlations
- Recommended selection strategy rules

**Location:** `/.resources/content-guidelines/keywords/`

---

## Phase 2: Agent Updates

### 2.1 Update Agent Logic
- [ ] **Category-based CSV selection** - Agent picks correct CSV file based on category input
- [ ] **Analysis file integration** - Agent reads corresponding analysis.md file for rules
- [ ] **Data-driven selection rules** - Replace generic guidance with specific rules from analysis

### 2.2 Update Agent Documentation
- [ ] **Input requirements** - Clarify how category determines CSV selection
- [ ] **Process documentation** - Update to reflect analysis-based approach
- [ ] **Usage examples** - Show examples with different categories

---

## Phase 3: Testing & Validation

### 3.1 Test Agent Functionality
- [ ] **Single post test** - Test with one category (e.g., Botox)
- [ ] **Multi-category test** - Test with different categories
- [ ] **Batch processing test** - Test content queue with mixed categories
- [ ] **Keyword selection validation** - Verify agent follows analysis rules

### 3.2 Content Quality Review  
- [ ] **Keyword integration review** - Check natural keyword usage
- [ ] **Local data integration** - Verify city-specific content works
- [ ] **SEO compliance** - Validate front matter and structure
- [ ] **Reading level check** - Confirm 9th grade reading level

---

## Phase 4: Documentation & Refinement

### 4.1 Update Documentation
- [ ] **CLAUDE.md updates** - Reflect final keyword architecture
- [ ] **Content queue template** - Add guidance for category selection
- [ ] **Agent README** - Update with final workflow

### 4.2 Process Refinement
- [ ] **Rule adjustments** - Refine based on testing results  
- [ ] **Agent optimization** - Improve based on performance
- [ ] **Workflow documentation** - Document best practices discovered

---

## Quick Reference

**Keywords Folder Structure:**
```
/.resources/content-guidelines/keywords/
├── botox.csv
├── botox-analysis.md
├── dermal-fillers.csv  
├── dermal-fillers-analysis.md
├── dysport.csv
├── dysport-analysis.md
└── [additional categories as needed]
```

**Next Steps:**
1. Start with creating botox.csv (your highest priority category)
2. Analyze botox.csv data to create botox-analysis.md  
3. Test agent with Botox category
4. Repeat for other categories
5. Full system testing

---

## Notes
- Each analysis.md should contain specific numerical rules (not generic guidance)
- Agent should be data-driven, not assumption-based
- Test thoroughly with real keyword data before expanding to all categories
- Consider seasonal trends in keyword analysis